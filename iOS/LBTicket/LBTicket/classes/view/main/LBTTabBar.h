//
//  LBTTabBar.h
//  LBTicket
//
//  Created by liubo on 2017/9/13.
//  Copyright © 2017年 liubo. All rights reserved.
//

#import <UIKit/UIKit.h>
@class LBTTabBar;

@protocol LBTTabBarDelegate <NSObject>

@optional
- (void)tabBar:(LBTTabBar *)tabBar didSelectButtonFrom:(NSUInteger)from to:(NSUInteger)to;

@end
@interface LBTTabBar : UIView

- (void)addTabBarButton:(NSString *)icon selIcon:(NSString *)selIcon;
@property (nonatomic, weak) id<LBTTabBarDelegate> delegate;

@end
